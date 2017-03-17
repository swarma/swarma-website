BOOTSTRAP_SM_MAX_WIDTH = 767
PAGE_SIZE = 4

START_PAGE = 1
page = 1

@change_teachers_show = (target_page, width)->
  width = jQuery(window).width() unless width
  if width <= BOOTSTRAP_SM_MAX_WIDTH
    jQuery(".home-teachers-content .paginate-content").removeClass "hidden"
  else
    jQuery(".home-teachers-content .paginate-content").addClass "hidden"
    count = jQuery(".home-teachers-content .paginate-content").length
    max_page = parseInt(count / PAGE_SIZE)
    max_page += 1 if count % PAGE_SIZE

    target_page = max_page if target_page > max_page
    target_page = 1 if target_page < 1

    page = target_page

    max = PAGE_SIZE * target_page - 1
    min = PAGE_SIZE * (target_page - 1)

    jQuery(".home-teachers-content .paginate-content")[min..max].removeClass "hidden"

jQuery(document).on 'ready page:load', ->
  if jQuery(".page-home").length
    # 初始化
    change_teachers_show START_PAGE, jQuery(window).width()

    # 绑定翻页
    $home_teachers = jQuery(".home-teachers")
    $home_teachers.on "click", ".prev", ->
      console.log 'click prev'
      change_teachers_show page - 1
    $home_teachers.on "click", ".next", ->
      console.log 'click next'
      change_teachers_show page + 1

    # 绑定窗口变化
    jQuery(window).resize ->
      change_teachers_show page, jQuery(window).width()
