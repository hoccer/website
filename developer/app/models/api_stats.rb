class ApiStats

  include Mongoid::Document

  class << self

    def map_stats
      return <<-EOF
        function() {
          var pad       = function(n) {
            return n<10 ? '0'+n : n
          }

          var timestamp = this.timestamp.getFullYear() +
                          "-" +
                          pad(( this.timestamp.getMonth() + 1 )) +
                          "-" +
                          pad(this.timestamp.getDate()) +
                          "T" +
                          pad(this.timestamp.getHours()) +
                          ":00:00";

          emit(timestamp, 1);
        }
      EOF
    end

    def reduce_stats
      return <<-EOF
        function(k, vals) {
          var sum=0;

          for (var i in vals) {
            sum += vals[i];
          }

          return sum;
        }
      EOF
    end

    def unique_users_for_api_key api_key
      
      results = collection.map_reduce(
        map_stats,
        reduce_stats,
        :out    => { :inline => 1},
        :raw    => true,
        :query  => {"api_key" => api_key, "timestamp" => {"$gt" => 24.hours.ago.utc }}
      )["results"]

      data_array = results.map do |h|
        [ h["_id"].to_time.to_i*1000, h["value"]]
      end

      [
        :label  => "Transfers per Hour",
        :data   => data_array,
        :color  => "rgb(65, 170, 193)",
        :grid   => { :color => "rgb(40, 40, 40)" }
      ]

    end

  end

end
