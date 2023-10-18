@extends('layout.material')
@section('my-content')
    <div class="card-header">
      <h4>Calendar</h4>
    </div>
    <div class="card-body">
      <div class="fc-overflow">
        <div id="myEvent" class="fc fc-unthemed fc-ltr"><div class="fc-toolbar fc-header-toolbar"><div class="fc-left"><div class="fc-button-group"><button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left"><span class="fc-icon fc-icon-left-single-arrow"></span></button><button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right"><span class="fc-icon fc-icon-right-single-arrow"></span></button></div><button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled" disabled="">today</button></div><div class="fc-right"><div class="fc-button-group"><button type="button" class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active">month</button><button type="button" class="fc-agendaWeek-button fc-button fc-state-default">week</button><button type="button" class="fc-agendaDay-button fc-button fc-state-default">day</button><button type="button" class="fc-listMonth-button fc-button fc-state-default fc-corner-right">list</button></div></div><div class="fc-center"><h2>October 2023</h2></div><div class="fc-clear"></div></div><div class="fc-view-container" style=""><div class="fc-view fc-month-view fc-basic-view" style=""><table class=""><thead class="fc-head"><tr><td class="fc-head-container fc-widget-header"><div class="fc-row fc-widget-header"><table class=""><thead><tr><th class="fc-day-header fc-widget-header fc-sun"><span>Sun</span></th><th class="fc-day-header fc-widget-header fc-mon"><span>Mon</span></th><th class="fc-day-header fc-widget-header fc-tue"><span>Tue</span></th><th class="fc-day-header fc-widget-header fc-wed"><span>Wed</span></th><th class="fc-day-header fc-widget-header fc-thu"><span>Thu</span></th><th class="fc-day-header fc-widget-header fc-fri"><span>Fri</span></th><th class="fc-day-header fc-widget-header fc-sat"><span>Sat</span></th></tr></thead></table></div></td></tr></thead><tbody class="fc-body"><tr><td class="fc-widget-content"><div class="fc-scroller fc-day-grid-container" style="overflow: hidden auto; height: auto;"><div class="fc-day-grid fc-unselectable"><div class="fc-row fc-week fc-widget-content" style="height: 91px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2023-10-01"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2023-10-02"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2023-10-03"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2023-10-04"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2023-10-05"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2023-10-06"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2023-10-07"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2023-10-01"><span class="fc-day-number">1</span></td><td class="fc-day-top fc-mon fc-past" data-date="2023-10-02"><span class="fc-day-number">2</span></td><td class="fc-day-top fc-tue fc-past" data-date="2023-10-03"><span class="fc-day-number">3</span></td><td class="fc-day-top fc-wed fc-past" data-date="2023-10-04"><span class="fc-day-number">4</span></td><td class="fc-day-top fc-thu fc-past" data-date="2023-10-05"><span class="fc-day-number">5</span></td><td class="fc-day-top fc-fri fc-past" data-date="2023-10-06"><span class="fc-day-number">6</span></td><td class="fc-day-top fc-sat fc-past" data-date="2023-10-07"><span class="fc-day-number">7</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 91px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2023-10-08"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2023-10-09"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2023-10-10"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2023-10-11"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2023-10-12"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2023-10-13"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2023-10-14"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2023-10-08"><span class="fc-day-number">8</span></td><td class="fc-day-top fc-mon fc-past" data-date="2023-10-09"><span class="fc-day-number">9</span></td><td class="fc-day-top fc-tue fc-past" data-date="2023-10-10"><span class="fc-day-number">10</span></td><td class="fc-day-top fc-wed fc-past" data-date="2023-10-11"><span class="fc-day-number">11</span></td><td class="fc-day-top fc-thu fc-past" data-date="2023-10-12"><span class="fc-day-number">12</span></td><td class="fc-day-top fc-fri fc-past" data-date="2023-10-13"><span class="fc-day-number">13</span></td><td class="fc-day-top fc-sat fc-past" data-date="2023-10-14"><span class="fc-day-number">14</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style=""><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2023-10-15"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2023-10-16"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2023-10-17"></td><td class="fc-day fc-widget-content fc-wed fc-today " data-date="2023-10-18"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2023-10-19"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2023-10-20"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2023-10-21"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2023-10-15"><span class="fc-day-number">15</span></td><td class="fc-day-top fc-mon fc-past" data-date="2023-10-16"><span class="fc-day-number">16</span></td><td class="fc-day-top fc-tue fc-past" data-date="2023-10-17"><span class="fc-day-number">17</span></td><td class="fc-day-top fc-wed fc-today " data-date="2023-10-18"><span class="fc-day-number">18</span></td><td class="fc-day-top fc-thu fc-future" data-date="2023-10-19"><span class="fc-day-number">19</span></td><td class="fc-day-top fc-fri fc-future" data-date="2023-10-20"><span class="fc-day-number">20</span></td><td class="fc-day-top fc-sat fc-future" data-date="2023-10-21"><span class="fc-day-number">21</span></td></tr></thead><tbody><tr><td rowspan="4"></td><td rowspan="4"></td><td rowspan="4"></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#00bcd4"><div class="fc-content"><span class="fc-time">11:30a</span> <span class="fc-title">Palak Jani</span></div></a></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#DC35A9"><div class="fc-content"><span class="fc-time">7p</span> <span class="fc-title">Airi Satou</span></div></a></td><td rowspan="4"></td><td class="fc-event-container" rowspan="4"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#00bcd4"><div class="fc-content"><span class="fc-time">11:30a</span> <span class="fc-title">Palak Jani</span></div></a></td></tr><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#fe9701"><div class="fc-content"><span class="fc-time">1:30p</span> <span class="fc-title">Priya Sarma</span></div></a></td><td class="fc-event-container" rowspan="3"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#fe9701"><div class="fc-content"><span class="fc-time">9p</span> <span class="fc-title">Angelica Ramos</span></div></a></td></tr><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#F3565D"><div class="fc-content"><span class="fc-time">5:30p</span> <span class="fc-title">John Doe</span></div></a></td></tr><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#1bbc9b"><div class="fc-content"><span class="fc-time">7p</span> <span class="fc-title">Sarah Smith</span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style=""><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2023-10-22"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2023-10-23"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2023-10-24"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2023-10-25"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2023-10-26"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2023-10-27"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2023-10-28"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2023-10-22"><span class="fc-day-number">22</span></td><td class="fc-day-top fc-mon fc-future" data-date="2023-10-23"><span class="fc-day-number">23</span></td><td class="fc-day-top fc-tue fc-future" data-date="2023-10-24"><span class="fc-day-number">24</span></td><td class="fc-day-top fc-wed fc-future" data-date="2023-10-25"><span class="fc-day-number">25</span></td><td class="fc-day-top fc-thu fc-future" data-date="2023-10-26"><span class="fc-day-number">26</span></td><td class="fc-day-top fc-fri fc-future" data-date="2023-10-27"><span class="fc-day-number">27</span></td><td class="fc-day-top fc-sat fc-future" data-date="2023-10-28"><span class="fc-day-number">28</span></td></tr></thead><tbody><tr><td rowspan="2"></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#9b59b6"><div class="fc-content"><span class="fc-time">2:30a</span> <span class="fc-title">Priya Sarma</span></div></a></td><td rowspan="2"></td><td class="fc-event-container" rowspan="2"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#F3565D"><div class="fc-content"><span class="fc-time">5:30p</span> <span class="fc-title">John Doe</span></div></a></td><td rowspan="2"></td><td rowspan="2"></td><td rowspan="2"></td></tr><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#F3565D"><div class="fc-content"><span class="fc-time">9:30a</span> <span class="fc-title">Mark Hay</span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 91px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2023-10-29"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2023-10-30"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2023-10-31"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2023-11-01"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2023-11-02"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2023-11-03"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2023-11-04"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2023-10-29"><span class="fc-day-number">29</span></td><td class="fc-day-top fc-mon fc-future" data-date="2023-10-30"><span class="fc-day-number">30</span></td><td class="fc-day-top fc-tue fc-future" data-date="2023-10-31"><span class="fc-day-number">31</span></td><td class="fc-day-top fc-wed fc-other-month fc-future" data-date="2023-11-01"><span class="fc-day-number">1</span></td><td class="fc-day-top fc-thu fc-other-month fc-future" data-date="2023-11-02"><span class="fc-day-number">2</span></td><td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2023-11-03"><span class="fc-day-number">3</span></td><td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2023-11-04"><span class="fc-day-number">4</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 94px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-future" data-date="2023-11-05"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-future" data-date="2023-11-06"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2023-11-07"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2023-11-08"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2023-11-09"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2023-11-10"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2023-11-11"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-other-month fc-future" data-date="2023-11-05"><span class="fc-day-number">5</span></td><td class="fc-day-top fc-mon fc-other-month fc-future" data-date="2023-11-06"><span class="fc-day-number">6</span></td><td class="fc-day-top fc-tue fc-other-month fc-future" data-date="2023-11-07"><span class="fc-day-number">7</span></td><td class="fc-day-top fc-wed fc-other-month fc-future" data-date="2023-11-08"><span class="fc-day-number">8</span></td><td class="fc-day-top fc-thu fc-other-month fc-future" data-date="2023-11-09"><span class="fc-day-number">9</span></td><td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2023-11-10"><span class="fc-day-number">10</span></td><td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2023-11-11"><span class="fc-day-number">11</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div>
      </div>
    </div>
  </div>
@endsection
