<?php
class DocumentTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('documents')->delete();
 
        Document::create(
        		array(
		            'user_id' => '2',
		            'description' => 'Test description 1',
		            'content' => 'This is the content of document 1 as entered by the client.',
        		)
        );
        Document::create(
                array(
                    'user_id' => '2',
                    'description' => 'Newspaper Article',
                    'content' => 'This is the content of document 2 as entered by the client.',
                )
        );
    }
}