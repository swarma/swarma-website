@open_login = ->
  jQuery("#signTab a:first").tab("show")
  jQuery("#modalLogin").modal("show")

@open_reg = ->
  jQuery("#signTab a:last").tab("show")
  jQuery("#modalLogin").modal("show")
