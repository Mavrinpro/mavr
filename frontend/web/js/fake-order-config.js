$(function ($) {
	$('body').fakeorder({
		cities: [
			'Ульяновск', 'Тольятти', 'Самара', 'Саранск', 'Саратов', 'Чебоксары', 'Пенза', 'Димитровград', 'Новоульяновск', 'Инза'
		],

		maleName: [
				'Александр', 'Алексей', 'Антон', 'Андрей', 'Анатолий', 'Борис', 'Богдан', 'Владимир', 'Виктор', 'Виталий',
				'Вячеслав', 'Валерий', 'Глеб', 'Геннадий', 'Григорий', 'Герман', 'Георгий', 'Денис', 'Давид', 'Евгений', 'Егор',
				'Иван', 'Игорь', 'Игнат', 'Илья', 'Константин', 'Кирилл', 'Леонид', 'Михаил', 'Марат', 'Николай', 'Никита',
				'Олег', 'Петр', 'Павел', 'Роман', 'Ренат', 'Руслан', 'Рустам', 'Станислав', 'Семен', 'Федор', 'Эдуард',
				'Юрий', 'Ярослав', 'Яков'
		],

		femaleName: [
			'Анна', 'Анастасия', 'Алена', 'Алина', 'Анжелла', 'Агата', 'Валентина', 'Валерия', 'Виктория', 'Галина',
			'Диана', 'Дарья', 'Екатерина', 'Елена', 'Евгения', 'Жанна', 'Зоя', 'Ирина', 'Инна', 'Инесса', 'Инга',
			'Кристина', 'Ксения', 'Карина', 'Любовь', 'Людмила', 'Марина', 'Мария', 'Марта', 'Надежда', 'Наталия',
			'Ольга', 'Римма', 'Рая', 'Светлана', 'Софья', 'Татьяна', 'Тамара', 'Ульяна', 'Юлия', 'Яна'
		],

		products: [
			'прайс лист',
			'обратный звонок',
			'консультацию'
		],

		
  		descriptionMale : '[name] из города [city] заказал [product]',
		descriptionFemale : '[name] из города [city] заказала [product]',

		imgPath: 'img/icons/notification-bell.svg',

	});
}(jQuery));