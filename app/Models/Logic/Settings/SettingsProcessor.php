<?php

namespace App\Models\Logic\Settings;

use App\Models\Tables\Setting;
use Illuminate\Database\Eloquent\Model;

class SettingsProcessor extends Model
{
    public function checkRelevance()
    {
        $settingsQuery = Setting::query();

        $settingsEntity = $settingsQuery->first();

        if (!$settingsEntity) {
            $settingsEntity=$this->createSettingsEntity();
        }

        return;
    }

    public function createSettingsEntity()
    {
        $setting = new Setting();
        $setting->save();

        return $setting;
    }
}
