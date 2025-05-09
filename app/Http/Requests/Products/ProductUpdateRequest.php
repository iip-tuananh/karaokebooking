<?php

namespace App\Http\Requests\Products;

use App\Http\Requests\BaseRequest;
use Illuminate\Validation\Rule;

class ProductUpdateRequest extends BaseRequest
{
    /**
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules =[
            'name' => 'required|unique:products,name,'.$this->route('id').",id",
            'cate_id' => 'required|exists:categories,id',
            'manufacturer_id' => 'nullable|exists:manufacturers,id',
            'origin_id' => 'nullable|exists:origins,id',
            'short_des' => 'nullable',
            'intro' => 'nullable',
            'body' => 'nullable',
            'base_price' => 'nullable|integer',
            'price' => 'nullable|integer',
            'status' =>'required|in:0,1',
            'image' => 'nullable|file|mimes:jpg,jpeg,png|max:3000',
            'image_back' => 'nullable|file|mimes:jpg,jpeg,png|max:3000',
            'galleries' => 'nullable|array|min:1|max:20',
            'galleries.*.image' => 'required_without:galleries.*.id|file|mimes:png,jpg,jpeg',
            'post_ids' => 'nullable|array|max:5',
            'videos' => 'nullable|array',
            'province_id' => 'required|exists:provinces,id',
            'district_id' => 'required|exists:districts,id',
            'ward_id' => 'required|exists:wards,id',
            'address' => 'nullable',
            'google_map' => 'required',
        ];

        $url_custom = $this->get('url_custom');
        if($url_custom) {
            $rules['url_custom']  = 'unique:products,url_custom,'.$this->route('id').",id";
        }

        $videoInput = $this->get('videos');

        if(($videoInput)) {
            foreach ($videoInput as $key => $video) {
                $rules['videos.'.$key.'.'.'link']   = 'required';
                $rules['videos.'.$key.'.'.'video']   = 'required';
            }
        }
        return $rules;
    }

}
