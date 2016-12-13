this.open_login = function() {
  jQuery("#signTab a:first").tab("show");
  return jQuery("#modalLogin").modal("show");
};

this.open_reg = function() {
  jQuery("#signTab a:last").tab("show");
  return jQuery("#modalLogin").modal("show");
};
