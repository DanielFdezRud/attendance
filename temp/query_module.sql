$arr = 
SELECT course.shortname, cat.name 
FROM mdl_course_modules AS mcm JOIN mdl_course AS mcourse ON mcm.course = mcourse.id
JOIN mdl_course_category AS mccat ON mcourse.category = mccat.id
WHERE mcm.id = ?;

INSERT INTO mdl_attendance(module)
VALUES $arr[0];