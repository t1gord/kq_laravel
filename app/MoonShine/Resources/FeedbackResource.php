<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Feedback;

use MoonShine\Fields\Date;
use MoonShine\Fields\Text;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;

class FeedbackResource extends Resource
{
	public static string $model = Feedback::class;

	public static string $title = 'Обратная связь';

    public static array $activeActions = ['show', 'delete'];

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            Text::make('Имя', 'name'),
            Text::make('Телефон', 'phone')
                ->hideOnIndex(),
            Text::make('E-mail', 'email'),
            Text::make('Город', 'city')
                ->hideOnIndex(),
            Text::make('Сообщение', 'message')
                ->hideOnIndex(),
            Date::make('Дата', 'created_at')
        ];
	}

	public function rules(Model $item): array
	{
	    return [];
    }

    public function search(): array
    {
        return ['id'];
    }

    public function filters(): array
    {
        return [];
    }

    public function actions(): array
    {
        return [
            FiltersAction::make(trans('moonshine::ui.filters')),
        ];
    }
}
