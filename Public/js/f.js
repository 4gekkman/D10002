/*//========================================////
////																			  ////
////   f.js - функционал модели документа   ////
////																			  ////
////========================================////
//// 			        		 	    	   ////
//// 			    Оглавление  			 ////
//// 			         				       ////
////=============================//*/
/**
 *
 *  s0. Функционал, доступный всему остальному функционалу
 *
 *    f.s0.txt_delay_save						| s0.1. Функционал "механизма отложенного сохранения для текстовых полей"
 *
 *  s1. Общий функционал модели [такой-то]
 *
 *		f.s1.saveimage  							| s1.1. Загрузить изображение из файла
 *
 *
 */


//========================//
// 			        		 	    //
// 			 Функционал  			//
// 			         			    //
//====================----//
var ModelFunctions = { constructor: function(self) { var f = this;


	//--------------------------------------------------------------------//
	// 			        		 			                                            //
	// 			 s0. Функционал, доступный всему остальному функционалу 			//
	// 			         					                                            //
	//--------------------------------------------------------------------//
	f.s0 = {};

		//-------------------------------------------------------------------------//
		// s0.1. Функционал "механизма отложенного сохранения для текстовых полей" //
		//-------------------------------------------------------------------------//
		f.s0.txt_delay_save = {};

			//----------------------------------------------------------------------//
			// 1] Применить "механизм отложенного сохранения для текстовых полей"   //
			//----------------------------------------------------------------------//
			// - Он особенно актуален для текстовых полей.
			// - Делает так, что функция сохранения срабатывает не при каждом нажатии.
			// - А лишь спустя заданные N секунд после последнего изменения.
			f.s0.txt_delay_save.use = function(savefunc){

				// 2.1. Остановить ранее запланированный setTimeout
				if(self.m.s0.txt_delay_save.settimeoutid())
					clearTimeout(self.m.s0.txt_delay_save.settimeoutid());

				// 2.2] Если время для сохранения не пришло
				if(+Date.now() - +self.m.s0.txt_delay_save.lastupdate() < +self.m.s0.txt_delay_save.gap) {

					// Поставить выполнение на таймер
					var timerId = setTimeout(savefunc, self.m.s0.txt_delay_save.gap);

					// Сохранить timerId в модель
					self.m.s0.txt_delay_save.settimeoutid(timerId);

					// Сохранить текущий timestamp в модель
					self.m.s0.txt_delay_save.lastupdate(Date.now());

					// Указать, что имееются не сохранённые данные
					self.m.s0.txt_delay_save.is_unsaved_data(1);

					// Завершить
					return 1;

				}

				// 2.3] Если время для сохранения пришло
				else {

					// Сохранить текущий timestamp в модель
					self.m.s0.txt_delay_save.lastupdate(Date.now());

				}

			};

			//-------------------------------------//
			// 2] Заблокировать закрытие документа //
			//-------------------------------------//
			// - Иными словами указать, что есть несохранённые данные.
			// - Попытка закрыть страницу в итоге приведёт к вызову модального confirm.
			f.s0.txt_delay_save.block = function(){
				self.m.s0.txt_delay_save.is_unsaved_data(1);
			};

			//--------------------------------------//
			// 3] Разблокировать закрытие документа //
			//--------------------------------------//
			// - Иными словами указать, что нет несохранённых данных.
			// - Попытка закрыть страницу в итоге уже не приведёт к вызову модального confirm.
			f.s0.txt_delay_save.unblock = function(){
				self.m.s0.txt_delay_save.is_unsaved_data(0);
			};



	//----------------------------------------------------------------//
	// 			        		 			                                        //
	// 			 s1. Функционал загрузки нового изображения из файла 			//
	// 			         					                                        //
	//----------------------------------------------------------------//
	f.s1 = {};

		//--------------------------------------//
		// s1.1. Загрузить изображение из файла //
		//--------------------------------------//
		// - Пояснение
		f.s1.saveimage = function() {

			// 1] Проверить, выбран ли файл, если нет, завершить
			if(!self.m.s1.inputurl()) {
				notify({msg: "Выберите изображение", time: 10, fontcolor: 'RGB(200,50,50)'});
				return;
			}

			// 2] Сообщить, что запрос отправляется
			notify({msg: "Запрашиваю сервер...", time: 1000000});

			// 3] Подготовить данные в формате FormData
			var fd = new FormData();
			fd.append('file', self.m.s1.inputurl());
			fd.append('command', "");
			fd.append('key', "D10002:1");
			fd.append('timestamp', Date.now());
			fd.append('group', "testgroup");
			fd.append('params', JSON.stringify({
				"sizes": [ [100, 100] ],
				"types": ["image/jpeg"],
				"filters": ['GrayScale']
			}));

			// 3] Отправить запрос
			ajaxko(self, {
			  command: 	    "",
			  key: 	    		"D10002:1",
				from: 		    "f.s1.saveimage",
				ajax_request_body: fd,
				timestamp:    Date.now(),
				ajax_headers: {"X-CSRF-TOKEN": server.csrf_token},
			  prejob:       function(config, data, event){},
			  postjob:      function(data, params){},
			  ok_0:         function(data, params){
					notify({msg: "Успех", time: 10, fontcolor: 'RGB(50,120,50)'});
				},
			  ok_2:         function(data, params){
					notify({msg: "Неудача", time: 10, fontcolor: 'RGB(200,50,50)'});
				}
			  //ajax_params:  {},
			  //key: 			    "D1:1",
				//from_ex: 	    [],
			  //callback:     function(data, params){},
			  //ok_1:         function(data, params){},
			  //error:        function(){},
			  //timeout:      function(){},
			  //timeout_sec:  200,
			  //url:          window.location.href,
			  //ajax_method:  "post",
			  //ajax_headers: {"Content-Type": "application/json", "X-CSRF-TOKEN": server.csrf_token}
			});

		};



return f; }};




























