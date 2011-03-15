class StatisticsController < ApplicationController
  before_filter :authenticate_account!
  
  def per_date
    respond_to do |format|
      format.js   { render :json => ApiStats.unique_users_for_api_key(current_account.api_key).to_json }
    end
  end
end
