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

class w_clock_m_clock extends Model
{
	public function get_birthdays()
	{
		return $this->db->select('up.user_id', 'up.date_of_birth', 'u.username')
						->from('nf_users_profiles up')
						->join('nf_users u', 'up.user_id = u.user_id AND u.deleted = "0"', 'INNER')
						->where('DATE_FORMAT(up.date_of_birth, "%m-%d") = DATE_FORMAT(NOW(), "%m-%d")')
						->get();
						
	}
	public function get_evenements()
	{
		return $this->db->select('event_id' ,'title', 'date', 'date_end', 'published')
					->from('nf_events')
					->where('published = "1" and date >= now()')
					->order_by('date ASC')
					->get();
	}
}
/*
NeoFrag Alpha 0.1.4
./widgets/clock/models/clock.php
*/