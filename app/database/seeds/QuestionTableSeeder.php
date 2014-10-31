<?php
class QuestionTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('questions')->delete();
 
        Question::create(
        		array(
		            'user_id' => '1',
		            'description' => 'Test question 1',
		            'content' => 'This is the content of question 1',
        		)
        );
        Question::create(
                array(
                    'user_id' => '1',
                    'description' => 'Test question 2',
                    'content' => 'This is the content of question 2',
                )
        );
        Question::create(
        		array(
		            'user_id' => '2',
		            'description' => 'Test question 1,user2',
		            'content' => 'This is the content of question 1',
        		)
        );
    }
}
