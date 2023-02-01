<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'product_name' => 'required | string | alpha_num |  max:255',
            'price'   => 'required | numeric | digits_between:2,3 |	alpha_num',
            'stock'   => 'required | numeric | digits_between:1,3 | alpha_num',
            'comment' => 'required | string | alpha_num |  max:255',
            'file'    => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'product_name' => '商品名',
            'price'   => '価格',
            'stock'   => '在庫数',
            'comment' => 'コメント',
            'file'    => '画像'
        ];
    }

    /**
     * エラーメッセージ
     *
     * @return array
     */
    public function messages()
    {
        return [
            // 商品名 バリエーション
            'new_register.required'    => ':attributesは必須項目です',
            'new_register.max'         => ':attributeは:max字以内で入力してください。',

            // 価格     バリエーション
            'price.required'           => ':attributesは必須項目です',
            'price.numeric'            => ':attributesに数値を入力してください',
            'price.digits_between:2,3' => ':attributesは999までの数値を入力してください',
            'price.alpha_num'          => ':attributesで入力してください',

            // 在庫数   バリエーション
            'stock.required'           => ':attributesは必須項目です',
            'stock.numeric'            => ':attributesに数値を入力してください',
            'stock.digits_between:2,3' => ':attributesに999より小さくしてください',
            'stock.alpha_num'          => ':attributesで入力してください',

            // コメント バリエーション
            'comment.required'         => ':attributesは必須項目です',
            'comment.alpha_num'        => ':attributesで入力してください',
            'comment.max'              => ':attributeは:max字以内で入力してください。',

            // 画像    バリエーション
            'file.required'            => ':attributeを選択してください',
            'title.max'                => ':attributeは:max字以内で入力してください。',
        ];
    }
}
