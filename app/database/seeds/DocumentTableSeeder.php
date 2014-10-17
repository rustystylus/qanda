<?php
class DocumentTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('documents')->delete();
 
        Document::create(
        		array(
		            'user_id' => '2',
		            'description' => 'Test description 1',
		            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin massa est, scelerisque et molestie facilisis, venenatis in diam. Fusce fermentum congue feugiat. Mauris iaculis volutpat augue, et placerat dolor consectetur condimentum. Vestibulum imperdiet enim et ipsum hendrerit, sed fermentum augue condimentum. Aliquam augue est, mollis sed urna at, semper rutrum ipsum. Curabitur luctus rutrum enim ac vulputate. Sed vestibulum tortor eu magna varius molestie. Aenean sed quam at dolor consequat laoreet. Aenean ullamcorper porta vehicula.',
        		)
        );
        Document::create(
                array(
                    'user_id' => '2',
                    'description' => 'Newspaper Article',
                    'content' => 'Proin massa est, scelerisque et molestie facilisis, venenatis in diam. Mauris iaculis volutpat augue, et placerat dolor consectetur condimentum. Vestibulum imperdiet enim et ipsum hendrerit, sed fermentum augue condimentum. Aliquam augue est, mollis sed urna at, semper rutrum ipsum. Curabitur luctus rutrum enim ac vulputate. Sed vestibulum tortor eu magna varius molestie. Aenean sed quam at dolor consequat laoreet. Aenean ullamcorper porta vehicula.',
                )
        );
    }
}