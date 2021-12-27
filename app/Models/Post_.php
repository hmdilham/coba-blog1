<?php

namespace App\Models;


class Post
{
    private static $blog_content = [
        [
            "title" => "Posting Pertama",
            "slug" => "posting-pertama",
            "author" => "Penulis Pertama",
            "post-content" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias exercitationem, tenetur repudiandae similique dolor deserunt harum fugiat ab sed sit voluptatem soluta atque, dolores rem blanditiis placeat, itaque consectetur unde nesciunt? Quibusdam quod, temporibus amet inventore, mollitia deserunt officia exercitationem corrupti itaque laborum sed consectetur nam animi magnam voluptas ea necessitatibus rem expedita sapiente. Recusandae, quasi adipisci? Amet eveniet explicabo facere voluptates eos laudantium obcaecati blanditiis fugiat maiores nobis. Adipisci numquam repudiandae, veritatis fuga illum eveniet itaque quidem et consequatur."
        ],
        [
            "title" => "Posting kedua",
            "slug" => "posting-kedua",
            "author" => "Penulis kedua",
            "post-content" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum, magni pariatur qui velit, quae perspiciatis beatae amet blanditiis explicabo eius natus odit eum dicta expedita commodi quaerat? Itaque quo iusto obcaecati nam perferendis, culpa voluptas voluptatibus ab nisi, officiis accusantium aut libero alias ducimus! Earum iure recusandae voluptate ratione eius, hic iusto veniam at sint. Quaerat, assumenda? Voluptate sint optio quisquam. Delectus magnam sequi atque, exercitationem tempora officiis unde sapiente nam quam consectetur mollitia optio sint ipsam quis! Est nisi mollitia reprehenderit quod inventore ab modi possimus nihil. Reiciendis ipsa, aut eius aliquam nihil ullam error beatae et voluptate illum est dignissimos mollitia! Fuga officiis et doloremque, aliquam sint ratione, facilis maiores similique suscipit illum explicabo, repellendus dolorum eius animi?"

        ]
    ];

    public static function all()
    {
        return collect(self::$blog_content);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts -> firstWhere('slug',$slug);
    }
}