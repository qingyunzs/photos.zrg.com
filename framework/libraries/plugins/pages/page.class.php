<?php
/**
 * 分页类
 * $total - 总记录数
 * $page_number - 一页显示的记录数
 * $current_page - 当前页
 * $current_url - 获取当前的url 
 */
class page {
    private $total;          //总记录数
    private $page_number;           //一页显示的记录数
    private $current_page;           //当前页
    private $page_counts;     //总页数
    private $page_start;              //起头页数
    private $page_end;             //结尾页数
    private $current_url;            //获取当前的url
    /*
     * $show_pages
     * 页面显示的格式，显示链接的页数为2*$show_pages+1。
     * 如$show_pages=2那么页面上显示就是[首页] [上页] 1 2 3 4 5 [下页] [尾页] 
     */
    private $show_pages;
    public function __construct($total = 1, $page_number = 1, $current_page = 1, $current_url, $show_pages = 2) {
        $this->total = $this->numeric($total);
        $this->page_number = $this->numeric($page_number);
        $this->current_page = $this->numeric($current_page);
        $this->page_counts = ceil($this->total / $this->page_number);
        $this->current_url = $current_url;
        if ($this->total < 0)
            $this->total = 0;
        if ($this->current_page < 1)
            $this->current_page = 1;
        if ($this->page_counts < 1)
            $this->page_counts = 1;
        if ($this->current_page > $this->page_counts)
            $this->current_page = $this->page_counts;
        $this->limit = ($this->current_page - 1) * $this->page_number;
        $this->page_start = $this->current_page - $show_pages;
        $this->page_end = $this->current_page + $show_pages;
        if ($this->page_start < 1) {
            $this->page_end = $this->page_end + (1 - $this->page_start);
            $this->page_start = 1;
        }
        if ($this->page_end > $this->page_counts) {
            $this->page_start = $this->page_start - ($this->page_end - $this->page_counts);
            $this->page_end = $this->page_counts;
        }
        if ($this->page_start < 1)
            $this->page_start = 1;
    }
    //检测是否为数字
    private function numeric($num) {
        if (strlen($num)) {
            if (!preg_match("/^[0-9]+$/", $num)) {
                $num = 1;
            } else {
                $num = substr($num, 0, 11);
            }
        } else {
            $num = 1;
        }
        return $num;
    }
    //地址替换
    private function page_replace($page) {
        return str_replace("{page}", $page, $this->current_url);
    }
    //首页
    private function myde_home() {
        if ($this->current_page != 1) {
            return "<a href='" . $this->page_replace(1) . "' title='首页'>首页</a>";
        } else {
            return "<p>首页</p>";
        }
    }
    //上一页
    private function myde_prev() {
        if ($this->current_page != 1) {
            return "<a href='" . $this->page_replace($this->current_page - 1) . "' title='上一页'>上一页</a>";
        } else {
            return "<p>上一页</p>";
        }
    }
    //下一页
    private function myde_next() {
        if ($this->current_page != $this->page_counts) {
            return "<a href='" . $this->page_replace($this->current_page + 1) . "' title='下一页'>下一页</a>";
        } else {
            return"<p>下一页</p>";
        }
    }
    //尾页
    private function myde_last() {
        if ($this->current_page != $this->page_counts) {
            return "<a href='" . $this->page_replace($this->page_counts) . "' title='尾页'>尾页</a>";
        } else {
            return "<p>尾页</p>";
        }
    }
    //输出
    public function myde_write($id = 'page') {
        $str = "<div id=" . $id . ">";
        $str.=$this->myde_home();
        $str.=$this->myde_prev();
        if ($this->page_start > 1) {
            $str.="<p class='pageEllipsis'>...</p>";
        }
        for ($i = $this->page_start; $i <= $this->page_end; $i++) {
            if ($i == $this->current_page) {
                $str.="<a href='" . $this->page_replace($i) . "' title='第" . $i . "页' class='cur'>$i</a>";
            } else {
                $str.="<a href='" . $this->page_replace($i) . "' title='第" . $i . "页'>$i</a>";
            }
        }
        if ($this->page_end < $this->page_counts) {
            $str.="<p class='pageEllipsis'>...</p>";
        }
        $str.=$this->myde_next();
        $str.=$this->myde_last();
        $str.="<p class='pageRemark'>共<b>" . $this->page_counts .
                "</b>页<b>" . $this->total . "</b>条数据</p>";
        $str.="</div>";
        return $str;
    }
}
?>