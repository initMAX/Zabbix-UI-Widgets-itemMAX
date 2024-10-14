<?php declare(strict_types = 0);
/*
** Copyright (C) 2001-2024 initMAX s.r.o.
**
** This program is free software: you can redistribute it and/or modify it under the terms of
** the GNU Affero General Public License as published by the Free Software Foundation, version 3.
**
** This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
** without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
** See the GNU Affero General Public License for more details.
**
** You should have received a copy of the GNU Affero General Public License along with this program.
** If not, see <https://www.gnu.org/licenses/>.
**/


namespace Modules\ItemMAX;

use Zabbix\Core\CWidget;

class Widget extends CWidget {

	// Form blocks.
	public const SHOW_DESCRIPTION = 1;
	public const SHOW_VALUE = 2;
	public const SHOW_TIME = 3;
	public const SHOW_CHANGE_INDICATOR = 4;

	// Objects positions.
	public const POSITION_LEFT = 0;
	public const POSITION_CENTER = 1;
	public const POSITION_RIGHT = 2;

	public const POSITION_TOP = 0;
	public const POSITION_MIDDLE = 1;
	public const POSITION_BOTTOM = 2;

	public const POSITION_BEFORE = 0;
	public const POSITION_ABOVE = 1;
	public const POSITION_AFTER = 2;
	public const POSITION_BELOW = 3;

	public const CHANGE_INDICATOR_UP = 1;
	public const CHANGE_INDICATOR_DOWN = 2;
	public const CHANGE_INDICATOR_UP_DOWN = 3;

	public const HISTORY_DATA_AUTO = 0;
	public const HISTORY_DATA_HISTORY = 1;
	public const HISTORY_DATA_TRENDS = 2;

	public function getDefaultName(): string {
		return _('ItemMAX value');
	}
}
