<?php
    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;


    class UpdateSocialMediaLinkModelRequest
        extends FormRequest
    {

        public function authorize(): bool
        {
            return false;
        }

        /**
         * Get the validation rules that apply to the request.
         *
         * @return array<string, mixed>
         */
        public function rules()
        {
            return
            [
                //
            ];
        }
    }
?>