#!/usr/bin/env ruby

require 'rubygems'
require 'fileutils'
require 'tempfile'
require 'gollum'

def main
  wiki = Gollum::Wiki.new("overview")
  page = wiki.page("Developer-website")
  
  puts page.formatted_data
rescue => e
  puts "oops: #{e}\n#{e.backtrace.join "\n"}"
  exit 1
end

(__FILE__ == $0) and (main) #end.
