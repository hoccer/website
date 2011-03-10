class WebsitesController < ApplicationController
  before_filter :authenticate_account!

  def create
    current_account.websites << params[:website]
    current_account.save

    redirect_to account_path
  end

  def destroy
    current_account.websites.delete params[:format]
    current_account.save

    redirect_to account_path
  end
end
