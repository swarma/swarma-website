var BOOTSTRAP_SM_MAX_WIDTH, PAGE_SIZE, START_PAGE, page;

BOOTSTRAP_SM_MAX_WIDTH = 767;

PAGE_SIZE = 4;

START_PAGE = 1;

page = 1;

this.change_teachers_show = function(target_page, width) {
  var count, max, max_page, min;
  if (!width) {
    width = jQuery(window).width();
  }
  if (width <= BOOTSTRAP_SM_MAX_WIDTH) {
    return jQuery(".home-teachers-content .paginate-content").removeClass("hidden");
  } else {
    jQuery(".home-teachers-content .paginate-content").addClass("hidden");
    count = jQuery(".home-teachers-content .paginate-content").length;
    max_page = parseInt(count / PAGE_SIZE);
    if (count % PAGE_SIZE) {
      max_page += 1;
    }
    if (target_page > max_page) {
      target_page = max_page;
    }
    if (target_page < 1) {
      target_page = 1;
    }
    page = target_page;
    max = PAGE_SIZE * target_page - 1;
    min = PAGE_SIZE * (target_page - 1);
    return jQuery(".home-teachers-content .paginate-content").slice(min, +max + 1 || 9e9).removeClass("hidden");
  }
};

jQuery(document).on('ready page:load', function() {
  var $home_teachers;
  if (jQuery(".page-home").length) {
    change_teachers_show(START_PAGE, jQuery(window).width());
    $home_teachers = jQuery(".home-teachers");
    $home_teachers.on("click", ".prev", function() {
      console.log('click prev');
      return change_teachers_show(page - 1);
    });
    $home_teachers.on("click", ".next", function() {
      console.log('click next');
      return change_teachers_show(page + 1);
    });
    return jQuery(window).resize(function() {
      return change_teachers_show(page, jQuery(window).width());
    });
  }
});
