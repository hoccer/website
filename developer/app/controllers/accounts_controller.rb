class AccountsController < ApplicationController
  before_filter :authenticate_account!

  def show
    puts current_account.inspect
  end
end
