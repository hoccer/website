#!/usr/bin/env ruby

@root_dir = File.expand_path(File.dirname(__FILE__))

def update_module name
  puts "updateing module #{name}"
  dir = File.join(@root_dir, name)
  system("cd #{dir} && git reset --hard && git pull")
  system("cd #{@root_dir} && git add #{name}")
end

def refresh_main_repo
  puts "refreshing main repo"
  #system("cd #{@root_dir} && git commit --allow-empty -m 'refreshed content from wikis'")
  system("cd #{@root_dir} && git submodule update")
end

def main
  update_module "developer/wikis/server"
  update_module "developer/wikis/overview"
  
  system("cd #{@root_dir} && ./generate_html.rb")
  #system("cd #{@root_dir} && git add developer/public")
  
  refresh_main_repo
rescue => e 
  puts "oops: #{e}\n#{e.backtrace.join "\n"}"
  exit 1
end

(__FILE__ == $0) and (main) #end.
