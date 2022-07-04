<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * File containing privacy tests.
 *
 * @package     local_aws
 * @copyright   2020 Catalyst IT
 * @author      Renaat Debleu <info@eWallah.net>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_aws\privacy;

/**
 * File containing privacy tests.
 *
 * @package     local_aws
 * @copyright   2020 Catalyst IT
 * @author      Renaat Debleu <info@eWallah.net>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class privacy_test extends \advanced_testcase {

    /**
     * Test privacy.
     * @covers \local_aws\privacy\provider
     */
    public function test_privacy() {
        $collection = new \core_privacy\local\metadata\collection('local_aws');
        $reason = provider::get_reason($collection);
        $this->assertEquals($reason, 'privacy:metadata');
    }
}
