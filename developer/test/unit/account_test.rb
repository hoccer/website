require 'test_helper'

class AccountTest < ActiveSupport::TestCase
  test "account validations" do
    a = Account.create
    assert !a.valid?
  end
end
