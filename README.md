# Joomla & K2

## Show category language in Dropdown (admin template override)

If you ever done a K2 site with multi-language, especially one where the category names are written the same in all languages, this will help a lot.

Examples of categories would be "posts", or the name of the company or division, etc.

Just go to extensions -> templates -> templates, select "Administrator" in the template area dropdown, and click the title of the template you are using (most likely "isis"). Now go to the tab "create override", and under components, click com_k2, then click on "item". Repeat the process for "items".

Now FTP to the folder /administrator/templates/YOUR_TEMPLATE/html/com_k2 and you will see two folders, "item" and "items", with a "default.php" file on each.

Edit the file at the folder "item" and place the code from the "item.php" file from this repository at the very end of the file. Repeat the same for "items".

Warning: This is very crude code, from a non-programmer just needing to solve a problem. It does solve the problem in a very simple way, but if anyone can do better and cleaner code, your contribution will be gladly accepted.
