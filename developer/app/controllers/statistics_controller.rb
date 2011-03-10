class StatisticsController < ApplicationController

  def per_date
    respond_to do |format|
      format.js   { render :json => ApiStats.unique_users.to_json }
    end
  end
end
