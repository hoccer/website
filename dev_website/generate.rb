#!/usr/bin/env ruby

@filepath = File.expand_path(File.dirname(__FILE__))

def update_module name
  dir = File.join(@filepath, name)
  system("cd #{dir} && git pull")
end

def refresh_main_repo
  dir = File.join(@filepath, "..")
  system("cd #{dir} && git submodule update")
end

def main
  update_module "server"
  update_module "overview"
  
  refresh_main_repo
rescue => e 
  puts "oops: #{e}\n#{e.backtrace.join "\n"}"
  exit 1
end





(__FILE__ == $0) and (main) #end.
