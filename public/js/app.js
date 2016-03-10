jQuery(function($){

  var $selectCareer = $('#career-select');
  var $selectCourse = $('#course-select');
  var $selectType = $('#type-select');
  var $search = $('#search');

  window.clearSelectOptions = function($el) {
    $el.find('option:not(:first-child)').remove();
  }

  window.populateCourses = function(courses) {
    clearSelectOptions($selectCourse);
    courses.forEach(function(course){
      $selectCourse.append(
        '<option value="'+course.slug+'">'+course.name+'</option>'
      );
    });
  }

  window.populateTypes = function(types) {
    clearSelectOptions($selectType);
    types.forEach(function(type){
      $selectType.append(
        '<option value="'+type.slug+'">'+type.name+'</option>'
      );
    });
  }

  $('.delete').click(function(e){
    var r = confirm("Desea borrar el recurso?");
    return r;
  });

  /*
  * Career Select Changes
  *
  */
  $selectCareer.change(function(e){
    e.preventDefault();

    $.get('/api/careers/'+$(this).val()+'/courses')
      .success(function(data){
        var courses = data.courses;
        if ( courses.length ) {
          populateCourses(courses);
          $selectCourse.prop('disabled', false);
          $selectCourse.selectpicker('refresh');
        }
      })
      .fail(function(err){
        console.error(err);
        $selectCourse.prop('disabled', true);
        $selectType.prop('disabled', true);
      })
  });

  /*
  * Course Select Changes
  *
  */
  $selectCourse.change(function(e){
    e.preventDefault();

    var career_slug = $selectCareer.val();

    $.get('/api/careers/'+career_slug+'/courses/'+$(this).val()+'/types')
      .success(function(data){
        var types = data.types;
        if ( types.length ) {
          populateTypes(types);
          $selectType.prop('disabled', false);
          $selectType.selectpicker('refresh');
        }
      })
      .fail(function(err){
        console.error(err);
        $selectType.prop('disabled', true);
      })
  });

  /*
  * Type Select Changes
  *
  */
  $selectType.change(function(e){
    e.preventDefault();
    $search.removeClass('disabled');
  });

  $search.click(function(e){
    e.preventDefault();

    if ( ! $(this).hasClass('disabled') ) {
      var course_slug = $selectCourse.val();
      var type_slug = $selectType.val();
      location.href = '/courses/' + course_slug + '/resources/' + type_slug;
    }
  })

});
