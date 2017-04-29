<?
namespace Common\Model;
use Think\Model;
use Think\Exception;
/**
*user模型
*/
class UserModel extends Model{
    private $_db = '';

    public function __construct() {
        $this->_db = M('user');
    }
    /**
     * 添加数据
     * @author Vhen
     * @DateTime [2017-04-16T17:01:37+0800]
     * @param    [type]
     */
    public function addData($data= array()){
        if(!$data){
            throw_Exception("没有提交数据！");
        }
        $res= $this->_db->add($data);
        return $res;
    }
    /**
     * 获取用户名
     * @author Vhen
     * @DateTime [2017-04-20T19:19:34+0800]
     * @param    string                     $loginName [description]
     * @return   [type]                                [description]
     */
    public function getUserName($loginName=""){
        $where=array(
            'loginName'=>$loginName
        );
        $res=$this->_db->where($where)->find();
        return $res;
    }
    /**
     * [UpdateByUserId 通过用户ID更新数据]
     * @author Vhen
     * @DateTime [2017-04-20T22:36:45+0800]
     * @param    [type]                     $id   [description]
     * @param    [type]                     $data [description]
     */
    public function UpdateByUserId($id,$data){
        if(!$id || !is_numeric($id)) {
            throw_exception("ID不合法！");
        }
        if(!$data || !is_array($data)) {
            throw_exception('更新的数据不合法！');
        }
        $where=array(
            'uid'=>$id
        );
        return $this->_db->where($where)->save($data);
    }
    public function IncByUserId($id,$data){
        if(!$id||!is_numeric($id)){
            throw_exception("ID不合法！");
        }
        $where=array(
            'uid'=>$id
        );
        return $this->_db->where($where)->setInc($data);
    }
}