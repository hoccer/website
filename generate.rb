#!/usr/bin/env ruby

filepath = File.expand_path(File.dirname(__FILE__))
@root_dir = File.join(filepath, "..")

def update_module name
  dir = File.join(@root_dir, name)
  system("cd #{dir} && git pull")
  system("cd #{@root_dir} && git add #{name}")
end

def refresh_main_repo
  system("cd #{@root_dir} && git commit --allow-empty -m 'refreshed content from wikis'")
  system("cd #{@root_dir} && git submodule update")
end

def main
  update_module "dev_website/server"
  update_module "dev_website/overview"
  
  system("cd #{@root_dir} && cd dev_website && ./generate_html.rb")
  system("cd #{@root_dir} && git add dev_website/html")
  
  refresh_main_repo
rescue => e 
  puts "oops: #{e}\n#{e.backtrace.join "\n"}"
  exit 1
end

(__FILE__ == $0) and (main) #end.
