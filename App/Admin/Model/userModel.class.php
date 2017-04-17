<?
namespace Common\Model;
use Common\Model\BaseModel;
/**
*user模型
*/
class userModel extends BaseModel{
    private $db='';
    /*读取用户表*/
    public function  __construct(){
        $this->db=M('user');
    }
    /**
    *自动验证
    */
    protected $_validate=array(
        array('loginName','require','用户不能为空！',0,'unique',3),
        array('loginPwd','checkPwd','密码不正确！',0,'function'),
        array('rePwd','password','确认密码不正确！',0,'function')
    )
    /**
    *自动完成
    */
    protected $_auto=array(
        array('password','getMd5',3,'function'),
        array('createTime','time',2,'function')
    )
    /**
     * 注册用户
     * @author Vhen
     * @DateTime [2017-04-16T17:01:37+0800]
     * @param    [type]
     */
    public function addData($data){
        $this->db->add($data)
    }
}