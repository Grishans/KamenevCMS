<?php namespace Kamenev\Parservk\Classes\VK;

class HandlerVK
{
    public $data;
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function handlerPostPhoto($photoData)
    {
        $photo = [
            "id" => $photoData->id,
            "type" => "photo",
            "owner_id" => $photoData->owner_id,
            "photo_1280" => $photoData->photo_1280,
            "photo_130" => $photoData->photo_130,
            "photo_604" => $photoData->photo_604,
            "photo_75" => $photoData->photo_75,
            "photo_807" => $photoData->photo_807,
            "text" => $photoData->text,
        ];

        return $photo;
    }

    public function handlerPostVideo($videoData)
    {
        $video = [
            "id" => $videoData->id,
            "type" => "video",
            "owner_id" => $videoData->owner_id,
            "title" => $videoData->title,
            "frame_130" => $videoData->first_frame_130,
            "frame_160" => $videoData->first_frame_160,
            "frame_320" => $videoData->first_frame_320,
            "frame_800" => $videoData->first_frame_800,
        ];

        return $video;
    }

    public function getPostsMedia($mediaData)
    {
        $media = [];
        foreach($mediaData as $item){
            switch($item->type){
                case "photo":
                    $media[] = $this->handlerPostPhoto($item->photo);
                    break;
                case "video":
                    $media[] = $this->handlerPostVideo($item->video);
                    break;
                default:
                    $media[] = "empty";
                    break;
            }
        }

        return $media;
    }

    public function getPostData(){
        $posts = [];
        $post = [];
        $media = [];
        foreach($this->data as $item){
            if($item->post_type == "post") {
                if(property_exists($item, "attachments")) {
                    $media = $this->getPostsMedia($item->attachments);
                } elseif (property_exists($item, "copy_history")) {
                    $media = $this->getPostsMedia($item->copy_history[0]->attachments);
                }
                $posts[] = [
                    'id' => $item->id,
                    'from_id' => $item->from_id,
                    'owner_id' => $item->owner_id,
                    'date' => $item->date,
                    'text' => $item->text,
                    'media' => $media,
                ];
            }
        }

        return $posts;
    }
}