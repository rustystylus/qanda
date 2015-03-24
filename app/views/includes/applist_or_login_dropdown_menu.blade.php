   <!-- Apps list menu dropdown OR register ,login-->

           <ul class="nav navbar-nav">
                    @if(!Auth::check())
                        <li>{{ HTML::link('users/register', 'Register') }}</li>  
                        <li>{{ HTML::link('users/login', 'Login') }}</li>  
                    @else                    
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Apps <b class="caret"></b></a>
                            <ul class="dropdown-menu" role="menu">
                                <li>{{ HTML::link('questions', 'Qanda') }}</li>
                                <li>{{ HTML::link('todos', 'Todo') }}</li>
                                <li>{{ HTML::link('users/restapi', 'RestAPI') }}</li>
                                <li class="divider"></li>
                             <!--   <li>{{ HTML::link('form', 'Upload Spreadsheet') }}</li>  -->
                                <li>{{ HTML::link('Rmexcel', 'Show Spreadsheet Table') }}</li>
                            </ul>
                        </li>
                        <li>
                        </li>
                    @endif 
              </ul>
