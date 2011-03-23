class AccountsController < ApplicationController
  before_filter :authenticate_account!

  def show
  end

  def update
    current_account.update_attribute(
      :hoccer_compatible,
      params[:account][:hoccer_compatible]
    )

    render :text => params.to_json
  end

  def statistics

  end
end
