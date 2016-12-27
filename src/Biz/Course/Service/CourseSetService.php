<?php

namespace Biz\Course\Service;

interface CourseSetService
{
    public function tryManageCourseSet($id);

    /**
     * @param array $ids
     *
     * @return array[]
     */
    public function findCourseSetsByIds(array $ids);

    /**
     * @param array   $conditions
     * @param array   $orderBys
     * @param integer $start
     * @param integer $limit
     *
     * @return array[]
     */
    public function searchCourseSets(array $conditions, array $orderBys, $start, $limit);

    /**
     * @param array $conditions
     *
     * @return integer
     */
    public function countCourseSets(array $conditions);

    public function getCourseSet($id);

    public function createCourseSet($courseSet);

    public function updateCourseSet($id, $fields);

    public function updateCourseSetDetail($id, $fields);

    public function changeCourseSetCover($id, $fields);

    public function deleteCourseSet($id);

    /**
     * @param integer $userId
     *
     * @return array[]
     */
    public function findTeachingCourseSetsByUserId($userId);
}
