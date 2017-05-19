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

class w_clock_c_index extends Controller_Widget
{
	public function index($settings = [])
	{
		$birthdays = [];
		$evenements = [];
		
		if ($settings['evenement'])
		{
			$evenements = $this->model()->get_evenements();
		}

		if ($settings['birthday'])
		{
			$birthdays = $this->model()->get_birthdays();
		}
		return $this->panel()
					->body($this->view('index', [
						'birthdays' => $birthdays,
						'birthday'  => $settings['birthday'],
						'clock'     => $settings['clock'],
						'calendar'  => $settings['calendar'],
						
						'evenements' 	=> $evenements,
						'evenement'		=> $settings['evenement'],
						'nbevenement'	=> $settings['nbevenement']
					]), FALSE);
	}	
}

/*
NeoFrag Alpha 0.1.6
./widgets/clock/controllers/index.php
*/