<?php if (!defined('NEOFRAG_CMS')) exit;
/**************************************************************************
Copyright © 2015 Michaël BILCOT & Jérémy VALENTIN

This file is part of NeoFrag.

NeoFrag is free software: you can redistribute it and/or modify
it under the terms of the GNU Lesser General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

NeoFrag is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU Lesser General Public License for more details.

You should have received a copy of the GNU Lesser General Public License
along with NeoFrag. If not, see <http://www.gnu.org/licenses/>.
**************************************************************************/

class w_clock_c_checker extends Controller_Widget
{
	public function index($settings = [])
	{
		return [
			'clock'    => in_array($settings['clock'], ['1', '0']) ? $settings['clock'] : '1',
			'calendar' => in_array($settings['calendar'], ['1', '0']) ? $settings['calendar'] : '1',
			'birthday' => in_array($settings['birthday'], ['1', '0']) ? $settings['birthday'] : '1',
			'evenement' => in_array($settings['evenement'], ['1', '0']) ? $settings['evenement'] : '1',
			'nbevenement' => in_array($settings['nbevenement'], ['1', '2', '3', '4', '5']) ? $settings['nbevenement'] : '1'
		];
	}
}

/*
NeoFrag Alpha 0.1.4
./widgets/clock/controllers/checker.php
*/