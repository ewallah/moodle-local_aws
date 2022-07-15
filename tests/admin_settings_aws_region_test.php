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
 * local_aws unit tests.
 *
 * @package   local_aws
 * @author    Mikhail Golenkov <mikhailgolenkov@catalyst-au.net>
 * @copyright 2020 Catalyst IT
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

<<<<<<< HEAD
namespace local_aws;

use advanced_testcase;
use \local_aws\admin_settings_aws_region;
=======
namespace local_aws\tests;

use local_aws\admin_settings_aws_region;
>>>>>>> 3c75ef7bc16d63da167f9cf5630f04c3845fb083

/**
 * Testcase for the list of AWS regions admin setting.
 *
 * @package    local_aws
 * @author     Mikhail Golenkov <mikhailgolenkov@catalyst-au.net>
 * @copyright  2020 Catalyst IT
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
<<<<<<< HEAD
class admin_settings_aws_region_test extends advanced_testcase {

    /**
     * Test that output_html() method works and returns HTML string with expected content.
     * @covers \local_aws\admin_settings_aws_region
=======
class admin_settings_aws_region_testcase extends \advanced_testcase {

    /**
     * Test that output_html() method works and returns HTML string with expected content.
>>>>>>> 3c75ef7bc16d63da167f9cf5630f04c3845fb083
     */
    public function test_output_html() {
        $this->resetAfterTest();
        $setting = new admin_settings_aws_region('test_aws_region',
            'Test visible name', 'Test description', 'Test default setting');
        $html = $setting->output_html('');
        $this->assertTrue(strpos($html, 'Test visible name') !== false);
        $this->assertTrue(strpos($html, 'Test description') !== false);
        $this->assertTrue(strpos($html, 'Default: Test default setting') !== false);
<<<<<<< HEAD
        $this->assertTrue(
            strpos($html, '<input type="text" list="s__test_aws_region" name="s__test_aws_region" value=""') !== false);
=======
        $this->assertTrue(strpos($html, '<input type="text" list="s__test_aws_region" name="s__test_aws_region" value=""') !== false);
>>>>>>> 3c75ef7bc16d63da167f9cf5630f04c3845fb083
        $this->assertTrue(strpos($html, '<datalist id="s__test_aws_region">') !== false);
        $this->assertTrue(strpos($html, '<option value="') !== false);
    }
}
