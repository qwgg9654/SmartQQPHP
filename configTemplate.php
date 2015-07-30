<?php
// *   This program is free software: you can redistribute it and/or modify
// *   it under the terms of the GNU General Public License as published by
// *   the Free Software Foundation, either version 3 of the License, or
// *   (at your option) any later version.
// *
// *   This program is distributed in the hope that it will be useful,
// *   but WITHOUT ANY WARRANTY; without even the implied warranty of
// *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// *   GNU General Public License for more details.
// *
// *   You should have received a copy of the GNU General Public License
// *   along with this program.  If not, see <http://www.gnu.org/licenses/>.
// *
// * @author     Xianglong He
// * @copyright  Copyright (c) 2015 Xianglong He. (http://tec.hxlxz.com)
// * @license    http://www.gnu.org/licenses/     GPL v3
// * @version    1.0
// * @discribe   RuiRuiQQ系统配置文件样本
?>
<?php
if (!defined('SMARTQQ_CONFIG'))
{
    define("SMARTQQ_CONFIG", "DEFINED");
    define("DBServer", "Your DataBase Server");
    define("DBName", "Your DataBase Name");
    define("DBUser", "Your DataBase UserName");
    define("DBPassword", "Your DataBase UserPssword");
    define("DBPowerUser", "Your DataBase UserName With Delete Permession");
    define("DBPowerPassword", "Your DataBase UserPssword With Delete Permession");  
    define("WeatherAPIID", "Your Weather API ID");
    define("WeatherAPIKey", "Your Weather API Key");
    $AdminPass="Set Your AdminDataPassword 1";
    $OCSServer="Your ALiYun OCS Address";
}
?>