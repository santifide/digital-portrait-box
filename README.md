This app works on wordpress. Wordpress must be installed, and the "fidelio" folder must be added inside wp-content/themes
Then, the "theme" must be activated.
The plugin must be installed:
WCK - Custom Fields and Custom Post Types Creator

::::::::::::CREAR EL SIGUIENTE POST TYPE:::::::::::::::
	
Post type:proyectos
Description:
Singular Label:proyecto
Plural Label:proyectos
Hierarchical:false
Has Archive:true
Supports:title, editor, custom-fields, comments
Hide Advanced Labels
Add New:
Add New Item:
Edit Item:
New Item:
All Items:
View Items:
Search Items:
Not Found:
Not Found In Trash:
Parent Item Colon:
Menu Name:
Featured Image:
Set Featured Image:
Remove Featured Image:
Use Featured Image:
Archives:
Inser Into Item:
Uploaded to this Item:
Filter Items List:
Items List Navigation:
Items List:
Hide Advanced Options
Public:true
Show UI:true
Show In Nav Menus:true
Show In Menu:true
Menu Position:
Menu Icon:
Capability Type:post
Taxonomies:
Rewrite:true
With Front:true
Rewrite Slug:
Show in REST API:false
::::::::::::::::::::::::::::::::::::::::::

CREAR LOS SIGUIENTES CUSTOM FIELDS

:::::::::::::::::::::::::::::::::::::::::::
	
Field Title:imageqr
Field Type:upload
Field Slug:imageqr
Description:
Required:false
Default Value:
Attach upload to post:yes

imagqr
The name of the group. Must be unique, only lowercase letters, no spaces and no special characters.

Post Type:*

proyectos
What post type the meta box should be attached to

Repeater:

false
Whether the box supports just one entry or if it is a repeater field. By default it is a single field.

Sortable:

false
Whether the entries are sortable or not. This is valid for repeater fields.

Post ID:
ID of a post on which the meta box should appear. You can also input multiple IDs and separate them with ","

Box Style:

Seamless (no meta-box)
If the fields should be in a meta-box or not

::::::::::::::::::::::::::::::::::::::::::::::::::::::::::

Group Name:*
portrait
The name of the group. Must be unique, only lowercase letters, no spaces and no special characters.

Post Type:*

proyectos
What post type the meta box should be attached to

Repeater:

true
Whether the box supports just one entry or if it is a repeater field. By default it is a single field.

Sortable:

false
Whether the entries are sortable or not. This is valid for repeater fields.

Post ID:
ID of a post on which the meta box should appear. You can also input multiple IDs and separate them with ","

Box Style:

Default (WP meta-box)
If the fields should be in a meta-box or not

#	Content	Edit	Delete
1	
Field Title:clase
Field Type:text
Field Slug:clase
Description:
Required:false
Default Value:
Edit	Delete
2	
Field Title:Imagen Png
Field Type:upload
Field Slug:imagen-png
Description:
Required:false
Default Value:
Attach upload to post:
Edit	Delete
3	
Field Title:titulo
Field Type:text
Field Slug:titulo
Description:
Required:false
Default Value:
Edit	Delete
4	
Field Title:Imagen Background
Field Type:upload
Field Slug:imagen-background
Description:
Required:false
Default Value:
Attach upload to post:
Edit	Delete
5	
Field Title:video
Field Type:upload
Field Slug:video
Description:
Required:false
Default Value:
Attach upload to post:
Edit	Delete
