# Joomla Child Templates

# Template Overrides - Recycle and reuse

Template overrides are, for me, the most powerful feature of Joomla. I use them a lot and they are what makes the difference between a good looking website and a great one. They can be as simple as moving the intro image above the article title to something more complex, including CSS and JavaScript changes, such as creating a photo gallery from a category of articles or creating a set of buttons to filter the content.

## There are just a few problems

### How do I re-use a template override?

If an override is good enough for a site I created last month then it may well be useful on the new site I am currently building? Digging into the filesystem to make a copy of the files, finding any CSS changes and copying them and then reversing the process on a the new site is not productive, efficient or reliable. It might be ok for one site but do you really want to do this every time? You can also find a few web sites and blogs that share template overrides but the instructions to use them can be quite complex and scary.

### How do I have multiple template overrides for the same view?

If I already have an override for the blog category then it gets even more complicated to add an additional override for the same view. Sometimes it can be achieved by simply renaming the layout but not every component has the ability for you to select an alternative layout. (There are some tricks to work around that limitation but that is just adding another layer of complexity). Renaming the layout also removes the connection between it and the original component - so you miss out on any notifications that the original has been changed on an update. You might miss out on bug fixes, new features and even a security fix.

## Problem Solving

I am still naïve enough to believe in an ideal world - a world where money grows on trees and where cabbage tastes like chocolate Or perhaps it’s not naivety but confidence that with open source software you can always create a solution to your problem or find someone or something that will. 

### Identify the problems?

What I want, what I really, really want is a method that would make my template overrides : 

- easy to install on any site
- can create multiple overrides of the same layout
- easy to share
- easy to update

### Finding a solution

I’ve been thinking about this for a while and I just couldn’t see a solution to all these problems. I had a few ideas that might work in the short term but they were never going to be a reliable, long term solution and then I had my own eureka moment. Not quite the same as Archimedes, I didn’t jump out of the bath and run down the street screaming, but still good enough to share.

## Use what you know

### Child templates

If you’ve not heard of them (they’re new in Joomla 4) a child template is exactly what it sounds like. A child template is like any other template but it only contains the files that are different to its parent template. When you create a child template and add an override to it then when you use that template you can access the override and everything else is inherited from the parent template.

### I didn’t see the benefit of children

I will admit that until now I didn’t really see the full benefit of child templates as I was still thinking in the one template per site mindset. You can create as many child templates as you want and you can use multiple templates on the same site just by assigning them to a menu item. This way I can create a child template called Gallery and use my blog category override and create a child template called Filtertags, also a blog category override, without them conflicting just by assigning the correct template to the appropriate menu item.

### Changing my build process

Since my eureka moment I now create each override in its own child template, giving it an appropriate name and assign it to the relevant menu item. The child template only contains the files and code that have been changed for the override. As everything else, including CSS and JavaScript, is from the parent then if I change the font family or colour scheme in the parent template each of the children will also use those changes.

### Completing the circle

There is no functionality, at the moment, to export a child template so that you can import it into a new site. Hopefully someone will read this article and create a pull request so for now its a manual process but you only have to do it once and then you have a child template you can install on any site.

## Create an installable child template

### Step 1 - Create the minimal structure

As we are going to be inheriting everything from the parent template this can be kept to the absolute bare minimum. I have created an example blank child template that you can download and customise.

### Step 2 - TemplateDetails.xml

Take my example file and replace the BTXXXXX with the name of your child template and update other values as required. You will see in my example that I add my initials to the name of the child template to avoid any possible conflict with other child templates.

### Step 3 - Add the files

Copy the files you created into their respective folders. The language files are optional but they should be edited and renamed as well and the same with the two preview images.

### Step 4 - Empty folders

My example includes an empty index.html file in each folder. This is required because Joomla will not create an empty folder during installation and while you might not need those folders now you will thank me later.

### Step 5 - Zip it up

Now just create a zip file of everything and test that there are no mistakes and that it will install on your test site.

### Step 6 - Install on a new site

All done. Now you can safely install on any new site

### Step 7 - Required final step

Wonder why you never thought of this before and rush to create installable child template of all your favourite overrides and share them with the world.

## Bonus

As well as the example blank child template I am also sharing some of my own installable child templates. They can serve as an example for you as they each use different features and functionality.
