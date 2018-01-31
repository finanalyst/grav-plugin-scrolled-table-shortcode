# Scrolled Table Shortcode Plugin

The **Scrolled Table Shortcode** Plugin is for [Grav CMS](http://github.com/getgrav/grav). It provides a ShortCode that wraps a table so that the content in the body of the table will scroll within the table body. It only uses css, no javascript.

## Installation

Installing the **Scrolled Table Shortcode** plugin can be done in one of two ways. The GPM (Grav Package Manager) installation method enables you to quickly and easily install the plugin with a simple terminal command, while the manual method enables you to do so via a zip file.

### GPM Installation (Preferred)

The simplest way to install this plugin is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm) through your system's terminal (also called the command line).  From the root of your Grav install type:

    bin/gpm install scrolled-table-shortcode

This will install the **Scrolled Table Shortcode** plugin into your `/user/plugins` directory within Grav. Its files can be found under `/your/site/grav/user/plugins/scrolled-table-shortcode`.

### Manual Installation

To install this plugin, just download the zip version of this repository and unzip it under `/your/site/grav/user/plugins`. Then, rename the folder to `scrolled-table-shortcode`. You can find these files on [GitHub](https://github.com/finanalyst/grav-plugin-scrolled-table-shortcode) or via [GetGrav.org](http://getgrav.org/downloads/plugins#extras).

You should now have all the plugin files under

    /your/site/grav/user/plugins/scrolled-table-shortcode

> NOTES: This plugin is a modular component for Grav which requires [Grav](http://github.com/getgrav/grav) and the [Error](https://github.com/getgrav/grav-plugin-error) and [Problems](https://github.com/getgrav/grav-plugin-problems) to operate.  
The [ShortCode Core](https://github.com/getgrav/grav-plugin-shortcode-core)  plugin is also required and is automatically installed if using Admin plugin.

## Configuration

Before configuring this plugin, you should copy the `user/plugins/sqlite/scrolled-table-shortcode.yaml` to `user/config/plugins/scrolled-table-shortcode.yaml` and only edit that copy.

Here is the default configuration and an explanation of available options:

```yaml
enabled: true
height: 55
width: 80
```

`enabled` turns on the plugin for the whole site, default is true  
`height` is the height of the table container in `vh` css units (percentage of viewport height). A range from 10 to 90 is recommended.  
`width` is the width of the table container in `vw` css units (percentage of viewport width). A range from 10 to 90 is recommended.

## Usage
In the body of the page:
```
[scrolled-table]
<!--- the content of your table in md format --->
[/scrolled-table]
```
For example:
```
[scrolled-table]
|Field 1|Field2|Field3|
|---------|---------|--------|
|3|4|5|
|9|10|11|
|3|4|5|
|9|10|11|
|3|4|5|r
|9|10|11|
|3|4|5|
|9|10|11|
[/scrolled-table]
```
This will render as:
```html
<div class="GravScrolledTable" style="height: 25vh; width: 80vw">
  <table>
    <thead>
      <tr><th>Field 1</th><th>Field2</th><th>Field3</th><\tr>
    </thead>
    <tbody>
      <tr><th>3</th><th>4</th><th>5</th>
         ..... ETC ETC
        ....
      </tr>
    </tbody>
</div>
```
The table must have `<thead>` and `<tbody>` sections, which are provided automatically with Markdown in the form in the example.

## Credits

Css solution to table body scrolling based on [this stackoverflow answer by G-Cyr](https://stackoverflow.com/a/23989771).

The scss mixins for the css were developed by [Matthieu Aussaguel]( http://www.mynameismatthieu.com).
