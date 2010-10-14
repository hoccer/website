#!/usr/bin/env ruby

require 'rubygems'
require 'fileutils'
require 'tempfile'
require 'gollum'
require 'erb'

@links = {
  "Developer-website" => "index",
  "More-about-the-hoccer-api" => "about_api",
  "Hoccer-Server-Implementation-V3" => "api_overview"
}

def erb file
  file = File.read("views/#{file}.erb")
  template = ERB.new file
  template.result(binding)
end

def generate_html wiki_name, page_name, template
  wiki = Gollum::Wiki.new(wiki_name)
  page = wiki.page(page_name)
  
  @html = replace_links page.formatted_data
  
  output_file = @links[page_name]  
  File.open("html/#{output_file}.html", "w+") do |file|
    file.write erb template
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
  
  FileUtils.rm_r(output_dir) if File.exists?(output_dir)
  FileUtils.mkdir(output_dir)
  
  generate_html "overview", "Developer-website", :index
  generate_html "overview", "More-about-the-hoccer-api", :index
  generate_html "server", "Hoccer-Server-Implementation-V3", :documantation
  
rescue => e
  puts "oops: #{e}\n#{e.backtrace.join "\n"}"
  exit 1
end

(__FILE__ == $0) and (main) #end.
