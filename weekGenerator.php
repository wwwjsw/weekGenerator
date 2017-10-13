<?php
	/**
	* WEEK GENERATOR
	*/
	class weekGenerator
	{
		
		function __construct()
		{
			# code...
		}
		function translateDay($initialDate = null)
		{
			$weekDay = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado');
			$initialDate = date('Y-m-d');
			
			$diasemana_numero = date('w', strtotime($initialDate));
			
			echo $weekDay[$diasemana_numero];
		}
		function weekDays($day)
		{
			$html = "<div class='day actual_day'><a onclick='document.getElementById('dia').value = '1'; document.getElementById('weekSearch').submit()'>Hoje</a></div>";
			$html .= "<div class='day'><a onclick='document.getElementById('dia').value = '2'; document.getElementById('weekSearch').submit()'>Ter</a></div>";
			$html .= "<div class='day'><a onclick='document.getElementById('dia').value = '3'; document.getElementById('weekSearch').submit()'>Qua</a></div>";
			$html .= "<div class='day'><a onclick='document.getElementById('dia').value = '4'; document.getElementById('weekSearch').submit()'>Qui</a></div>";
			$html .= "<div class='day'><a onclick='document.getElementById('dia').value = '5'; document.getElementById('weekSearch').submit()'>Sex</a></div>";
			$html .= "<div class='day'><a onclick='document.getElementById('dia').value = '6'; document.getElementById('weekSearch').submit()'>Sab</a></div>";
			$html .= "<div class='day'><a onclick='document.getElementById('dia').value = '7'; document.getElementById('weekSearch').submit()'>Dom</a></div>";
			$html .= "<div class='day'><a onclick='document.getElementById('dia').value = '7'; document.getElementById('weekSearch').submit()'>{$day}</a></div>";
			return $html;
		}
		function generate($initialDay)
		{
			$html = "<form id='weekSearch' method='post' action=''>";
				$html .= "<input type='hidden' id='dia' name='dia' value=''>";
					$html .= "<div class='week'>";
						$html .= $this->weekDays($initialDay);
					$html .= "</div>";
			$html .= "</form>";
			return $html;
		}
	}
