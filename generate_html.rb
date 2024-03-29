#!/usr/bin/env ruby

require 'rubygems'
require 'fileutils'
require 'tempfile'
require 'gollum'
require 'erb'

WIKI_DIR = 'developer/wikis'

@links = {
  "Developer-website" => "index",
  "More-about-the-hoccer-api" => "about_api",
  
  "Hoccer-Server-Implementation-V3" => "api_overview",
  "Api-documentation" => "api_overview"
}

class ERB
  @output_num = 0
  class << self
    attr_accessor :output_num
  end
end

def import path
  n = ERB.output_num += 1
  ERB.new(File.read(path), nil, nil, '_x_'+n.to_s).result()
end

def erb file
  file = File.read("developer/app/views/static/#{file}.erb")
  template = ERB.new file
  template.result(binding)
end

def generate_static wiki_name, page_name, template
  puts File.join(WIKI_DIR, wiki_name)
  wiki = Gollum::Wiki.new( File.join(WIKI_DIR, wiki_name) )
  page = wiki.page(page_name)
  
  @html = replace_links page.formatted_data
  
  output_file = @links[page_name]  
  File.open("developer/public/#{output_file}.html", "w+") do |file|
    file.write erb template
  end 
end

def generate_partial wiki_name, page_name
  wiki = Gollum::Wiki.new( File.join(WIKI_DIR, wiki_name) )
  page = wiki.page(page_name)
  
  html = replace_links page.formatted_data
  
  output_file = @links[page_name]  
  File.open("developer/app/views/shared/_#{output_file}.erb", "w+") do |file|
    file.write html
  end 
end

def replace_links website 
  doc = Nokogiri::HTML(%{<div id="gollum-root">} + website + %{</div>})
  
  doc.css("div#gollum-root a").each do |link| 
    old_href = link.attribute("href").value.slice(1..-1)

    if @links[old_href]
      new_href = "#{@links[old_href]}.html"
      link.set_attribute("href", new_href) 
    end
  end
  
  doc.css("div#gollum-root")
end

def main
  output_dir = "html"
  
  # FileUtils.rm_r(output_dir) if File.exists?(output_dir)
  # FileUtils.mkdir(output_dir)
  
  generate_partial "overview", "Developer-website"
  generate_static "overview", "More-about-the-hoccer-api",     :documentation
  
  generate_static "server", "Hoccer-Server-Implementation-V3", :documentation
  
rescue => e
  puts "oops: #{e}\n#{e.backtrace.join "\n"}"
  exit 1
end

(__FILE__ == $0) and (main) #end.
