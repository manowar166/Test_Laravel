        @extends('index')
        
        @section('content')
        <form method="POST" id="id-form_messages">
                
                <div class="form-group">
                    <label for="name">Имя: *</label>
                    <input class="form-control" placeholder="Имя" name="name" type="text" id="name">
                </div>
                
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input class="form-control" placeholder="E-mail" name="E-mail" type="email" id="email">
                </div>
                
                <div class="form-group">
                    <label for="message">Сообщение: *</label>
                    <textarea class="form-control" rows="5" placeholder="Текст сообщения" name="message" cols="50" id="message"></textarea>
                </div>
                
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Добавить">
                </div>
                
            </form>
            
            <div class="text-right"><b>Всего сообщений:</b> <i class="badge">0</i></div><br/>
            
            <div class="messages">
                <div class="panel panel-default">
                    
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <span>Карлсон</span>
                            <span class="pull-right label label-info">17:15:00 / 03.07.2016</span>
                        </h3>
                    </div>
                    
                    <div class="panel-body">
                        варкуркурукрукр
                        урукукрукурукр
                        урууруруруур
                        Бкыпцупццупц
                        <hr/>
                        <div class="pull-right">
                            <a class="btn btn-info" href="#">
                                <i class="qlyphicon qlyphicon-pencil"></i>
                            </a>
                            <button class="btn btn-danger">
                                <i class="qlyphicon qlyphicon-trash"></i>
                            </button>
                        </div>
                      </div>
                    
                    
                    
                </div>
            </div>
        
        @stop
        
     