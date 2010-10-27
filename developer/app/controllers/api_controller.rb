class ApiController < ApplicationController
  def index
    expires_in 3.hours, :public => true
    render :index, :layout => false
  end

end
