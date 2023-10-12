<?php
trait SiteCommon {
    public function getSiteName(){
        return '后盾人';
    }
}

trait  Log {
    public function save(): string
    {
        return __METHOD__;
    }

    public function total(): string
    {
        return '==Log==';
    }
}

trait Comments {
    use SiteCommon;

    abstract public function name();

    public static function show(): string
    {
        return 'SHow....SHow';
    }
    public function total(): string
    {
        return '==Comments==';
    }
}

class Site {
    public function total(): string
    {
        return '--Site--';
    }
}

class Topic extends Site{
    use Log, Comments {
        Log::total insteadof Comments;
        Comments::total as protected commentsTotal;
    }

    public function name()
    {
        // TODO: Implement name() method.
        return 'Implement name() method.';
    }

//    public function total(): string
//    {
//        return '==Topic==';
//    }
}

$topic = new Topic();
//echo $topic->save();
echo $topic->total();
echo '<hr/>';
//echo $topic->commentsTotal();
echo $topic->getSiteName();
echo $topic->name();
echo '<hr/>';
echo Topic::show();
echo Topic::class;
