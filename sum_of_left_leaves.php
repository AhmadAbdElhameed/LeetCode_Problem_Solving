<?php

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function sumOfLeftLeaves($root) {
        if($root == null){
            return 0;
        }
        else if($root->left != null && $root->left->left == null && $root->left->right == null){
            return $root->left->val += $this->sumOfLeftLeaves($root->right);
        }
        else{
            return $this->sumOfLeftLeaves($root->left) + $this->sumOfLeftLeaves($root->right);
        }
    }
}
