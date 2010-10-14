#!/usr/bin/env ruby

require 'rubygems'
require 'fileutils'
require 'tempfile'
require 'gollum'
require 'erb'

def erb file
  file = File.read("views/#{file}.erb")
  template = ERB.new file
  template.result(binding)
end


def main
  wiki = Gollum::Wiki.new("overview")
  page = wiki.page("Developer-website")
  
  @html = page.formatted_data
  
  puts erb :index
rescue => e
  puts "oops: #{e}\n#{e.backtrace.join "\n"}"
  exit 1
end

(__FILE__ == $0) and (main) #end.
