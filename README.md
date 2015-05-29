# RITpedia

This is the RITpedia MediaWiki theme. All content is released under the Apache License except any RIT or RITpedia related images/logos. Those are included as a point of reference, and do not fall under any opensource license.

## Installation
First, clone the repository into your `skins/` directory.

```
git clone https://github.com/borkweb/bootstrap-mediawiki.git
```

Next, in `LocalSettings.php` set:

```php
$wgDefaultSkin = 'bootstrapmediawiki';
```

Then add at the bottom:

```php
require_once( "$IP/skins/bootstrap-mediawiki/bootstrap-mediawiki.php" );
```

## Setup
Once you've enabled the skin, you'll want to create a few pages.

### Customization Vars

There are some customizations you can do to the theme by placing some variables in your `LocalSettings.php` file

Variable | Description
---------|------------
`$wgNavBarClasses` | Add additional classes to the navbar (example: `navbar-inverse` to get the black navbar). Example: `$wgNavBarClasses = 'navbar-inverse';`
`$wgSitenameShort` | Use this if you wish for your nav title to use a shorter name than your wiki's name. Example: `$wgSitenameShort = 'Short name';`
`$wgTOCLocation` | Moves the Table of Contents (when one exists) into a sidebar. Usage: `$wgTOCLocation = 'sidebar';`
`$wgSiteCSS` | Adds a custom CSS file so you can run your own CSS without customizing the base theme styles. Example: `$wgSiteCSS  = 'custom.css';`
`$wgSiteJS` | Adds a custom JS file so you can run your own JS. Example: `$wgSiteJS  = 'custom.js';`

### Useful templates for your wiki

#### Create: Bootstrap:Footer
This MediaWiki page will contain what appears in your footer.  I've set mine to the following:

```html
<div class="row">
	<div class="col-md-6">
		=== Stuff ===
		* [[Link to some place]]
		* [[Another link]]
	</div>
	<div class="col-md-6">
		=== More Stuff ===
		* [http://external.resource.org Go here]
	</div>
</div>
```


#### Create: Bootstrap:TitleBar / Bootstrap:Subnav
This MediaWiki page will control the links that appear in the Bootstrap navbar after the logo/site title.  The format that this page is expecting is as follows:

```
* Menu Item Title
** [[Page 1]]
** [[Page 2]]
** [[Page 3]]
* Another Menu
** [[Whee]]
** [[OMG hai]]
* [[A Link Menu]]
```

You can use this page to create dynamic menus, too! If you have an extension providing a parser function, this will get evaluated before the menu is displayed.
An interesting example is the usage of the [DynamicPageList third-party Extension](http://www.mediawiki.org/wiki/Extension:DynamicPageList_%28third-party%29) (BEWARE: not the MediaWiki one; maybe this works when you wrap this inside a {{#tag:}} to create a parser function on demand):

```
* Menu Item Title
{{#dpl:category=Dynamic Menu Pages|format=,** [[%PAGE%|%TITLE%]],\n,}}
```

You can name the category whatever you want, of course. Do not change the format string, as it will be needed as is by the template functions! But of course every other params for this function are possible...

The Bootstrap:Subnav page follow the same syntax as does the Bootstrap:TitleBar page. As the name already suggests, it will create a sub-navigation bar under the title bar.

#### Built in Templates: Homepage Big Box
```
__NOTOC__
<div id="bimg_container">
 	<!-- Note. Make sure you use tabs, not spaces. Spaces will invoke the syntax highlighter  -->
	<!-- Here is a tab for you "	" -->
	<div id="bimg_container_inner" class="image">
			[[Student_Government | <img class="homepage_image" src="{{filepath:SG_Office.jpg}}" alt="" style="width:1140px;min-height:100%;"/>]]
		<div id="bimg_subtext" class="container">
			[[Student_Government | RIT Student Government <span>Be Great.</span>]]
		</div>

		<div id="bimg_uptext" class="container">
			<div class="row">
				<div class="bg_trans col-md-6 col-lg-6 col-sm-6" style="padding-left: 25px; padding-top: 10px; font-weight: 400; font-size: 23px;">
					Welcome to [[RITpedia]]. <br /><span style="font-size:65%;"> a guide to [[RIT]]. Serving [[Special:Statistics|{{NUMBEROFARTICLES}}]] articles.</span>
				</div>
				<div class="bg_trans col-md-2 col-lg-2 col-sm-2">
					<ul style="list-style: none; padding: 0; margin: 0; padding-top: 5px;">
						<li>[[Academics]]</li>
						<li>[[Culture]]</li>
						<li>[[Places]]</li>
					</ul>
				</div>
				<div class="bg_trans col-md-2 col-lg-2 col-sm-2">
					<ul style="list-style: none; padding: 0; margin: 0; padding-top: 5px;">
						<li> [[History]]</li>
						<li>[[People]]</li>
						<li> [[Projects]]</li>
					</ul>
				</div>
				<div class="bg_trans col-md-2 col-lg-2 col-sm-2">
					<ul style="list-style: none; padding: 0; margin: 0; padding-top: 5px;">
						<li>[[Campus Directory|Directory]]</li>
						<li>[[Media]]</li>
						<li>[[Student Life]]</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="subschools" style="padding-left: 15px; padding-right: 15px; margin-bottom: 20px;">
<div class="row">
	<!-- # 12 / 4 = 3-->
	<div class="bg_trans col-md-3 col-lg-3 col-sm-3">
		[[Dubai:Main_Page | <img class="homepage_sub_image" src="{{filepath:Dubai Wiki.jpg}}" alt="" style="max-width:100%;min-height:100%;"/>]]
<div class="subschool_text">[[Dubai:Main_Page | Dubai, UAE]]</div>
	</div>
	<div class="bg_trans col-md-3 col-lg-3 col-sm-3">
		[[Kosovo:Main_Page | <img class="homepage_sub_image" src="http://placehold.it/285x140" alt="" style="max-width:100%;min-height:100%;"/>]]
		<div class="subschool_text">[[Kosovo:Main_Page | Kosovo]]</div>
	</div>
	<div class="bg_trans col-md-3 col-lg-3 col-sm-3">
		[[Zagreb:Main_Page | <img class="homepage_sub_image" src="{{filepath:RIT_Zagreb_WIKI.jpg}}" alt="" style="max-width:100%;min-height:100%;"/>]]
		<div class="subschool_text">[[Zagreb:Main_Page | Zagreb, Croatia ]]</div>
	</div>
	<div class="bg_trans col-md-3 col-lg-3 col-sm-3">
		[[Dubrovnik:Main_Page | <img class="homepage_sub_image" src="{{filepath:RIT_Dubrovnik_CSDEPT.jpg}}" alt="" style="max-width:100%;min-height:100%;"/>]]
		<div class="subschool_text">[[Dubrovnik:Main_Page | Dubrovnik, Croatia]]</div>
	</div>

</div>
</div>


```
