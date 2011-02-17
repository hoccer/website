class Account
  include Mongoid::Document
  
  field :websites, :type => Array, :default => Array.new
  
  # Include default devise modules. Others available are:
  # :token_authenticatable, :confirmable, :lockable and :timeoutable
  devise :database_authenticatable, :registerable, :confirmable,
         :recoverable, :rememberable, :trackable, :validatable

  
  after_create :generate_keys
  
  
  private

  def generate_keys
    self.update_attributes( :api_key => UUID.generate(:compact) )

    digestor = Digest::HMAC.new(
      (Time.now.to_i.to_s + email + api_key), Digest::SHA1
    )

    self.update_attributes( :shared_secret => digestor.base64digest )
  end
end
